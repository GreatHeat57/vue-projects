$(document).ready(function () {
  /* cart */
    $('#chefPassword_show').click(function(e){
      e.preventDefault();
      $('#newOrderModal').hide();
      
    });
    let itemCount = 0;
  
    $("#btnAdd").on("click", function () {
      itemCount += 1;
      if (itemCount <= 99) {
        $("#badge")[0].textContent = itemCount;
      } else {
        $("#badge")[0].textContent = "99";
        itemCount = 99;
      }
    })
  
    $("#btnRemove").on("click", function () {
      itemCount -= 1;
      if (itemCount >= 0 && itemCount <= 99) {
        $("#badge")[0].textContent = itemCount;
      } else if (itemCount < 0) {
        itemCount = 0;
      }
    });
    $(".third-subbox").click(function () {
      $(".add-cart").hide();
      $(".final-cart").show();
      $(".complate-order").show();
    });
    
    $(document).on("click", ".tabshead .ttab", function () {
      var target = $(this).attr("data-target");
      $(this)
        .parents(".tabscon")
        .find(".ttab")
        .removeClass("active");
      $(this)
        .parents(".tabscon")
        .find(".tabs")
        .removeClass("in");
      $(target).addClass("in");
      $(this).addClass("active");
    });
  
    $(document).on("click", ".inner-tabshead .inner-ttab", function () {
      var target = $(this).attr("data-target");
      $(this)
        .parents(".inner-tabscon")
        .find(".inner-ttab")
        .removeClass("active");
      $(this)
        .parents(".inner-tabscon")
        .find(".inner-tabs")
        .removeClass("in");
      $(target).addClass("in");
      $(this).addClass("active");
    });
  
  const speed = 5;
  function slideDown() {
    let sliderContainer = $(".fourthsec .simplebar-content");
    let remLength =
      $(sliderContainer)[0].scrollHeight - $(sliderContainer).height();
    let scrollable = remLength - $(sliderContainer).scrollTop();
  
    $(sliderContainer).animate(
      {
        scrollTop: remLength
      },
      speed * scrollable
    );
  }
  
  function slideUp() {
    let sliderContainer = $(".fourthsec .simplebar-content");
    $(sliderContainer).animate(
      {
        scrollTop: 0
      },
      speed * $(sliderContainer).scrollTop()
    );
  }