$(document).ready(function() {
    $("#openToast").toggleClass("hide view");
    
    $('a.exit--toast').click(function() {
        $("#openToast").fadeOut(1000, 0);
    });
  
    $(document).on('click', function (e) {
      if ($(e.target).closest(".notification--reminder").length === 0) {
          $("#openToast").fadeOut(1000, 0);
      }
  });
  });