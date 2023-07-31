import $ from 'jquery'


    $('.paymentBtn').on('click',function () {
        let currentBtn = $(this);
        $('.depositOverlayBlock').fadeIn(300, function () {
            let methodId = $(currentBtn).attr('data-id')
            $('.deposit-btn').attr('data-id',methodId)
            $(this).removeClass('hidden')
            $(this).addClass('!flex')
        })

    })
   $('.deposit-btn').on('click',function () {

       let methodId = $(this).attr('data-id')
       let amount = $('#deposit-amount').val()
       makeDeposit(methodId,amount)
   })



    $('.overlay').click(function () {
         $('.depositOverlayBlock ').fadeOut(300, function () {
             $(this).addClass('hidden')
             $(this).removeClass('!flex')
         })
     })

const makeDeposit = (id,amount) => {
    window.location.href = '/payment?id=' + id + "&amount=" + amount
}


