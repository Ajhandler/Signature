  $(document).ready(function(){
            $('.work-form').change(function() {
                var val = $(".work-form option:selected").text();
                $(".page-header").add("<small>" + val + "</small>")
                $(".page-header small").replaceWith("<small>" + val +  "</small>")
            });

             $(function() {
                $('a').fullsizable({
                detach_id: 'portfolio',
                clickBehaviour: 'next'
        });
    });
             $(document).on('fullsizable:opened', function(){
                $("#jquery-fullsizable").swipe({
                    swipeLeft: function(){
                      $(document).trigger('fullsizable:next')
                    },
                    swipeRight: function(){
                     $(document).trigger('fullsizable:prev')
                    },
                    swipeUp: function(){
                    $(document).trigger('fullsizable:close')
                    }
                });
            });

        });