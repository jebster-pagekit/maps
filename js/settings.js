$(function(){
    var vm = new Vue({
        el: '#maps-settings',

        data: {
            location: window.$data.location
        },

        methods: {
            save: function () {
                this.$http.post('/admin/maps/update', { location: this.location}, function() {
                    UIkit.notify(vm.$trans('Saved.'), '');
                }).error(function(data) {
                    UIkit.notify(data, 'danger');
                });
            }
        }
    });
});