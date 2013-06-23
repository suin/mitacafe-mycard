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
