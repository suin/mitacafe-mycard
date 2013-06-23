$ ()->

    showQRCodePopup = ()->
        $('#mask').show()
        $('#qrcode_popup').show()
        $('#card').hide()

    hideQRCodePopup = ()->
        $('#mask').hide()
        $('#qrcode_popup').hide()
        $('#card').show()


    $('body').on 'click', ()->
        popupQR()


    window.addEventListener 'devicemotion', (evt)->
        z = evt.accelerationIncludingGravity.z
        if z > 3
            showQRCodePopup()
        else
            hideQRCodePopup()

    #
    # To keep style, we need to re-bind `cycle` on window resize
    #
    resizeTimer = null
    resizeSlide = ()->
        $('#container').hide()
        clearTimeout(resizeTimer) # this detect resize-end event
        resizeTimer = setTimeout ()->
            $('#container').show()
            $('div').css("z-index", 1)
        , 100
    $(window).resize(resizeSlide)