$(document).ready(function () {
    //   $('#myTab a').on('click', function (e) {
    //   e.preventDefault()
    //   $(this).tab('show');
    // })

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.target // newly activated tab
        e.relatedTarget // previous active tab
    });
});