<?php $view->script('settings', 'maps:js/settings.js', ['vue', 'uikit']) ?>

<div id="maps-settings" class="uk-form" v-cloak>
    <div class="uk-margin uk-flex uk-flex-space-between uk-flex-wrap" data-uk-margin>
        <div data-uk-margin>
            <h2 class="uk-margin-remove">{{ 'Maps Settings' | trans }}</h2>
        </div>
        <div data-uk-margin>
            <button class="uk-button uk-button-primary" @click="save">
                {{ 'Save' | trans }}
            </button>
        </div>
    </div>

    <div class="uk-grid pk-grid-large pk-width-sidebar-large uk-form-stacked" data-uk-grid-margin>
        <div class="pk-width-content">
            <div class="uk-form-row">
                <label for="form-slug" class="uk-form-label">{{ 'Header' | trans }}:</label>
                <div class="uk-form-controls">
                    <input id="form-zoom" class="uk-width-1-1" type="text" v-model="location.header">
                </div>
            </div>

            <div class="uk-form-row">
                <label for="form-slug" class="uk-form-label">{{ 'Location' | trans }}:</label>
                <div class="uk-form-controls">
                    <input id="form-zoom" class="uk-width-1-1" type="text" v-model="location.location">
                </div>
            </div>
        </div>

        <div class="pk-width-sidebar">

            <div class="uk-form-row">
                <label for="form-slug" class="uk-form-label">{{ 'Height' | trans }}:</label>
                <div class="uk-form-controls">
                    <input id="form-height" class="uk-width-1-1" type="text" v-model="location.height">
                </div>
            </div>

            <div class="uk-form-row">
                <label for="form-slug" class="uk-form-label">{{ 'Width' | trans }}:</label>
                <div class="uk-form-controls">
                    <input id="form-width" class="uk-width-1-1" type="text" v-model="location.width">
                </div>
            </div>

            <div class="uk-form-row">
                <label for="form-slug" class="uk-form-label">{{ 'Zoom Level' | trans }}:</label>
                <div class="uk-form-controls">
                    <input id="form-zoom" class="uk-width-1-1" type="number" v-model="location.zoom">
                </div>
            </div>

            <div class="uk-form-row">
                <span class="uk-form-label">{{ 'Options' | trans }}</span>
                <div class="uk-form-controls">
                    <label><input type="checkbox" v-model="location.satellite" value="1"> {{ 'Satellite View' | trans }}</label>
                </div>
            </div>
        </div>

    </div>



</div>
