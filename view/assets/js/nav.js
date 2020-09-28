function nav(id)
{
  $(".block_category").css('display', 'none');

  $('#'+id).css('display', 'block');

  var arrayOfId = {
    'block_category_fleurs_dhivers':'fleurs_dhivers',
    'block_category_fleurs_plantes_interieur':'plantes_interieur',
    'block_category_fleurs_sechees':'fleurs_sechees'
  };

  for (var key in arrayOfId) {
    if (id == key) {
      $('#'+arrayOfId[key]+' a').attr('style','color: #ffbb4a !important');
    }
    else{
      $('#'+arrayOfId[key]+' a').attr('style','color: black !important');
    }
  }

}
