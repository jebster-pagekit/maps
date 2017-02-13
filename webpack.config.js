module.exports = [

    {
        entry: {
            "widget-maps": "./app/components/widget-maps.vue"
        },
        output: {
            filename: "./app/bundle/[name].js"
        },
        module: {
            loaders: [
                { test: /\.vue$/, loader: "vue" }
            ]
        }
    }

];
