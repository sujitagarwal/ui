<?php

declare(strict_types=1);

namespace atk4\ui\demo;

/** @var \atk4\ui\App $app */
require_once __DIR__ . '/../init-app.php';

// Test 1 - Basic reloading
\atk4\ui\Header::addTo($app, ['Button reloading segment']);
$v = \atk4\ui\View::addTo($app, ['ui' => 'segment'])->set((string) random_int(1, 100));
\atk4\ui\Button::addTo($app, ['Reload random number'])->js('click', new \atk4\ui\JsReload($v, [], new \atk4\ui\JsExpression('console.log("Output with afterSuccess");')));

// Reload but keep custom changes
\atk4\ui\Header::addTo($app, ['Button reloading View without loosing original values']);
$v = \atk4\ui\View::addTo($app)->set((string) random_int(1, 1000));
$inputControl = \atk4\ui\Form\Control\Input::addTo($v);
\atk4\ui\View::addTo($app)->js(true, null, $inputControl)->find('input')->val('test ' . (string) random_int(1, 1000)); // simulate change by user

$app->requireJs('https://fiduswriter.github.io/diffDOM/browser/diffDOM.js'); // use probably versioned CDN link here
// demo view-source:http://fiduswriter.github.io/diffDOM/demo/index.html
// man https://github.com/fiduswriter/diffDOM

\atk4\ui\Button::addTo($app, ['Reload but keep custom changes'])->js('click', new \atk4\ui\JsExpression('{}', [
    'var jsRenderFunc = function () { ' . (new \atk4\ui\JsReload($v))->jsRender() . ' };'
    . 'var reloadUrl = ' . (new \atk4\ui\JsExpression('[]', [$v->jsUrl(['__atk_reload' => $v->name])]))->jsRender() . ';'
    . <<<'EOF'
// jsRenderFunc(); // reload like with JsReload

$.get(reloadUrl, null, function(data) {
    if (data.success !== true) {
        alert('Invalid reload response');
    }
    var newHtml = data.html;
    // var newAtkJs = data.atkjs; // ignore JS, compare html only
    var id = data.id;
    console.log('Reload triggered, ID: ' + id);

    var dd = new diffDOM.DiffDOM();
    var cloneDom = function (elem) {
        var virtualElem = document.createElement(elem.tagName);
        dd.apply(virtualElem, dd.diff(virtualElem, elem));
        return virtualElem;
    };
    if (window.manualChangesEndVdom === undefined) {
        window.previousVdom = new DOMParser().parseFromString(window.snapshotAfterLoad, 'text/html').getElementById(id); // always clone
        window.manualChangesStartVdom = cloneDom(window.previousVdom);
        window.manualChangesEndVdom = cloneDom(window.previousVdom);
    }
    var realElem = document.getElementById(id);

    // find new manual changes
    var newManualChanges = dd.diff(window.previousVdom, realElem);
    dd.apply(window.manualChangesEndVdom, newManualChanges);
    var allManualChanges = dd.diff(window.manualChangesStartVdom, window.manualChangesEndVdom);

    // find all new changes (from server)
    var newChanges = dd.diff(realElem, newHtml);

    // combine diffs and apply at once
    var changes = [];
    changes.push(...newChanges);
    changes.push(...allManualChanges); // manual changes are prioritized
    dd.apply(realElem, changes);
    window.previousVdom = cloneDom(realElem);

    console.log('all ok');
}, 'json')
EOF
]));

// Test 2 - Reloading self
\atk4\ui\Header::addTo($app, ['JS-actions will be re-applied']);
$b2 = \atk4\ui\Button::addTo($app, ['Reload Myself']);
$b2->js('click', new \atk4\ui\JsReload($b2));

// Test 3 - avoid duplicate
\atk4\ui\Header::addTo($app, ['No duplicate JS bindings']);
$b3 = \atk4\ui\Button::addTo($app, ['Reload other button']);
$b4 = \atk4\ui\Button::addTo($app, ['Add one dot']);

$b4->js('click', $b4->js()->text(new \atk4\ui\JsExpression('[]+"."', [$b4->js()->text()])));
$b3->js('click', new \atk4\ui\JsReload($b4));

// Test 3 - avoid duplicate
\atk4\ui\Header::addTo($app, ['Make sure nested JS bindings are applied too']);
$seg = \atk4\ui\View::addTo($app, ['ui' => 'segment']);

// add 3 counters
Counter::addTo($seg);
Counter::addTo($seg, ['40']);
Counter::addTo($seg, ['-20']);

// Add button to reload all counters
$bar = \atk4\ui\View::addTo($app, ['ui' => 'buttons']);
$b = \atk4\ui\Button::addTo($bar, ['Reload counter'])->js('click', new \atk4\ui\JsReload($seg));

// Relading with argument
\atk4\ui\Header::addTo($app, ['We can pass argument to reloader']);

$v = \atk4\ui\View::addTo($app, ['ui' => 'segment'])->set($_GET['val'] ?? 'No value');

\atk4\ui\Button::addTo($app, ['Set value to "hello"'])->js('click', new \atk4\ui\JsReload($v, ['val' => 'hello']));
\atk4\ui\Button::addTo($app, ['Set value to "world"'])->js('click', new \atk4\ui\JsReload($v, ['val' => 'world']));

$val = \atk4\ui\Form\Control\Line::addTo($app, ['']);
$val->addAction('Set Custom Value')->js('click', new \atk4\ui\JsReload($v, ['val' => $val->jsInput()->val()], $val->jsInput()->focus()));
