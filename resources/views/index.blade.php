<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css"/>
        <title>laravel-webpack-vue</title>
    </head>
    <body>
        <div id="app">
            <!-- item template -->
            <script type="text/x-template" id="item-template">
            <li>
                <div
                :class="{bold: isFolder}"
                @click="toggle"
                @dblclick="changeType">
                @{{ model.name }}
                <span v-if="isFolder">[@{{ open ? '-' : '+' }}]</span>
                </div>
                <ul v-show="open" v-if="isFolder">
                <item
                    class="item"
                    v-for="(model, index) in model.children"
                    :key="index"
                    :model="model">
                </item>
                <li class="add" @click="addChild">+</li>
                </ul>
            </li>
            </script>

            <p>(You can double click on an item to turn it into a folder.)</p>

            <!-- the demo root element -->
            <ul id="demo">
            <item
                class="item"
                :model="treeData">
            </item>
            </ul>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>
