$(window).load(function(){
    $('#loadingOverlay').fadeOut();
});
$(document).ready(function(){
    $('.tabs:not(div:first-child)').addClass('hide');

    $('.selectMenu').selectmenu();
    $('.selectMenu').on('selectmenuchange', function() {
        activeTab = $(this).val();
        $('.sectionTabs[tab="'+activeTab+'"]').addClass('active');
        $('.sectionTabs:not(.sectionTabs[tab="'+activeTab+'"])').removeClass('active');
        $('#'+activeTab).removeClass('hide');
        $('#'+activeTab).addClass('animated fadeIn').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass('animated fadeIn');
        });
        $('#'+activeTab).siblings().addClass('animated fadeOut').removeClass('animated fadeOut');
        $('#'+activeTab).siblings().addClass('hide');

        $('html,body').scrollTo($('#'+activeTab+' h1'), 800);
    });

    $('.sectionTabs').click(function(){
        activeTab = $(this).attr('tab');
        $(this).parent().parent().find('td').removeClass('active');
        $(this).addClass('active');
        $('#'+activeTab).removeClass('hide');
        $('#'+activeTab).addClass('animated fadeIn').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass('animated fadeIn');
        });
        $('#'+activeTab).siblings().addClass('animated fadeOut').removeClass('animated fadeOut');
        $('#'+activeTab).siblings().addClass('hide');

    });

    scrollWidth = getScrollBarWidth();
    deviceWidth = ($(window).width() + scrollWidth);

    if(deviceWidth <= 999 ){
        $('div.sectionWrapper > span.ui-selectmenu-button').removeClass('hide');
        $('.iconNavigationWrapper').addClass('hide');
        $('#topBar').addClass('hide');
    } else{
        $('div.sectionWrapper span.ui-selectmenu-button').addClass('hide');
        $('.iconNavigationWrapper').removeClass('hide');
        $('#navigationMenu').removeClass('hide');
        $('#topBar').removeClass('hide');
    }

    $('#navigationWrapper').click(function(e){
        if(deviceWidth <= 999 ) {
            $('#navigationMenu').removeClass('hide');
            $('#navigationMenu').addClass('animated slideInLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                $(this).removeClass('animated slideInLeft');

            });
        }
    });

    $('#navigationMenu').click(function(e){
        if(deviceWidth <= 999 ) {
            $('#navigationMenu').addClass('animated slideOutLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                $(this).removeClass('animated slideOutLeft');
                $('#navigationMenu').addClass('hide');
            });
        }
    });


    $("#navigationMenu li a").click(function(evn){
        evn.stopPropagation();
        evn.preventDefault();
        if(deviceWidth <= 999 ) {
            $('#navigationMenu').addClass('animated slideOutLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                $(this).removeClass('animated slideOutLeft');
                $('#navigationMenu').addClass('hide');
            });
        }
        $('html,body').scrollTo(this.hash, this.hash, {offset:-110});


    });

    var aChildren = $("#navigationMenu li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    }


    $(window).scroll(function(){

        var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
        var windowHeight = $(window).height(); // get the height of the window
        var docHeight = $(document).height();

        for (var i=0; i < aArray.length; i++) {
            var theID = aArray[i];

            var divPos = $(theID).offset().top-120; // get the offset of the div from the top of page
//            console.log(theID);
            var divHeight = $(theID).height(); // get the height of the div in question
            if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                $("a[href='" + theID + "']").parent().addClass("active");
            } else {
                $("a[href='" + theID + "']").parent().removeClass("active");
            }
        }
        if(windowPos + windowHeight == docHeight) {
            if (!$("#navigationMenu li:last-child").hasClass("active")) {
                var navActiveCurrent = $(".active").children('a').attr("href");
                $("a[href='" + navActiveCurrent + "']").parent().removeClass("active");
                $("#navigationMenu  li:last-child").addClass("active");
            }
        }


        if ($(window).scrollTop() > 280) {
            if(deviceWidth >= 1000 ){
                $('#logoNavWrapper').addClass('navbar-fixed');
            }

        }
        if ($(window).scrollTop() < 281) {
            $('#logoNavWrapper').removeClass('navbar-fixed');

        }
    });

});

$(window).resize(function(){
    scrollWidth = getScrollBarWidth();
    deviceWidth = ($(window).width() + scrollWidth);
    if(deviceWidth <= 999 ){
        $('div.sectionWrapper > span.ui-selectmenu-button').removeClass('hide');
        $('.iconNavigationWrapper').addClass('hide');
        $('#topBar').addClass('hide');
        $('#navigationMenu').addClass('hide');
    } else{
        $('div.sectionWrapper span.ui-selectmenu-button').addClass('hide');
        $('.iconNavigationWrapper').removeClass('hide');
        $('#topBar').removeClass('hide');
        $('#navigationMenu').removeClass('hide');
    }


});

function getScrollBarWidth(){
    if($(document).height() > $(window).height()){
        $('body').append('<div id="fakescrollbar" style="width:50px;height:50px;overflow:hidden;position:absolute;top:-200px;left:-200px;"></div>');
        fakeScrollBar = $('#fakescrollbar');
        fakeScrollBar.append('<div style="height:100px;">&nbsp;</div>');
        var w1 = fakeScrollBar.find('div').innerWidth();
        fakeScrollBar.css('overflow-y', 'scroll');
        var w2 = $('#fakescrollbar').find('div').html('html is required to init new width.').innerWidth();
        fakeScrollBar.remove();
        return (w1-w2);
    }
    return 0;
}