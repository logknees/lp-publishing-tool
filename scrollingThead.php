<script>
    var $th = $('#results').find('thead th')
    $('#results').on('scroll', function() {
        $th.css('transform', 'translateY(' + this.scrollTop + 'px)');
    });
</script>