
$(".list-group-item").click(function() {
    $(this).parent().addClass('active').siblings().removeClass('active');
});