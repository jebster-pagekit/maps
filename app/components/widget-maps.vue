<template>
    <div class="uk-grid pk-grid-large" data-uk-grid-margin>
        <div class="uk-flex-item-1 uk-form-horizontal">

            <div class="uk-form-row">
                <label for="form-title" class="uk-form-label">{{ 'Title' | trans }}</label>
                <div class="uk-form-controls">
                    <input id="form-title" class="uk-form-width-large" type="text" name="title" v-model="widget.title" v-validate:required>
                    <p class="uk-form-help-block uk-text-danger" v-show="form.title.invalid">{{ 'Title cannot be blank.' | trans }}</p>
                </div>
            </div>
            <hr>
            <div class="uk-form-row">
                <label for="form-header" class="uk-form-label">{{ 'Header' | trans }}</label>
                <div class="uk-form-controls">
                    <input id="form-header" class="uk-form-width-large" type="text" v-model="widget.data.location.header" placeholder="{{placeholder.header}}">
                    <input id="form-header-color" type="color" v-model="widget.data.location.headerColor" />
                </div>
            </div>

            <div class="uk-form-row">
                <label for="form-location" class="uk-form-label" uk-tooltip="{{ 'Both longitude/latitude or writing a specific address are allowed.' | trans }}">{{ 'Location' | trans }}</label>
                <div class="uk-form-controls">
                    <input id="form-location" class="uk-form-width-large" type="text" name="location" v-model="widget.data.location.location" placeholder="{{placeholder.location}}"  v-validate:required>
                    <p class="uk-form-help-block uk-text-danger" v-show="form.location.invalid">{{ 'Location is required' | trans }}</p>
                </div>
            </div>

            <div class="uk-form-row">
                <label for="form-height" class="uk-form-label" uk-tooltip="{{ 'Either use percentage or px' | trans }}">{{ 'Height' | trans }}</label>
                <div class="uk-form-controls">
                    <input id="form-height" class="uk-form-width-large" type="text" v-model="widget.data.location.height" placeholder="{{placeholder.height}}">
                </div>
            </div>

            <div class="uk-form-row">
                <label for="form-width" class="uk-form-label">{{ 'Width' | trans }}</label>
                <div class="uk-form-controls">
                    <input id="form-width" class="uk-form-width-large" type="text" v-model="widget.data.location.width" placeholder="{{placeholder.width}}">
                </div>
            </div>

            <div class="uk-form-row">
                <label for="form-zoom" class="uk-form-label">{{ 'Zoom Level' | trans }}</label>
                <div class="uk-form-controls">
                    <input id="form-zoom" class="uk-form-width-large" type="number" v-model="widget.data.location.zoom" placeholder="{{placeholder.zoom}}">
                </div>
            </div>

            <div class="uk-form-row">
                <span class="uk-form-label">{{ 'Options' | trans }}</span>
                <div class="uk-form-controls">
                    <label><input type="checkbox" v-model="widget.data.location.satellite" value="1"> {{ 'Satellite View' | trans }}</label>
                </div>
            </div>
        </div>

        <div class="pk-width-sidebar pk-width-sidebar-large">
            <partial name="settings"></partial>

        </div>
    </div>

</template>

<script>
    module.exports = {
        section: {
            label: 'Settings'
        },
        replace: false,
        props: ['widget', 'config', 'form'],
        data() {
            return {
                placeholder: {
                    header: this.$trans('Text to display above map'),
                    width: '100%',
                    height: '320px',
                    location: 'Bystævneparken 19, 2700 Brønshøj',
                    zoom: 14,
                    satellite: true,
                    color: '#33cc00'
                }
            }
        },
        created() {
            this.$options.partials = this.$parent.$options.partials;
        },

        methods: {

        }
    };
    window.Widgets.components['jebster-map-widget:settings'] = module.exports;
</script>