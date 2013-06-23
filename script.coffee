showQRCodePopup = ()->
    $('#mask').show()
    $('#qrcode_popup').show()
    $('#body').addClass('blur')

hideQRCodePopup = ()->
    $('#mask').hide()
    $('#qrcode_popup').hide()
    $('#body').removeClass('blur')


$('body').on 'click', ()->
    popupQR()


window.addEventListener 'devicemotion', (evt)->
    z = evt.accelerationIncludingGravity.z
    if z > 5
        showQRCodePopup()
    else
        hideQRCodePopup()
