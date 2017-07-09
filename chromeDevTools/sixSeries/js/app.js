$.ajax({
    url: 'user.php',
    type: 'get',
    dataType: 'json',
    data: {
        nongNo: '1'
    },
    success: function (data) {
        console.log('data: ', data);
    }
})