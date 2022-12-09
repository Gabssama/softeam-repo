
initselect2()
function initselect2(){
  $("#materiel").select2({
    placeholder: 'Sélectionner un ou plusieurs matériels',
    allowClear:true,
    dropdownAutoWidth:true,
    scrollAfterSelect:true
  })
}

function getMateriels(clientId){
  $.ajax({
    url:'/client-materiel/'+ clientId,
    type:'GET',
    dataType:'json',
    success:function(data){
      const materiels = data;
      const materielsId = materiels.map(materiel => materiel.id);

      $("#materiel").val(materielsId).change()
      console.log(materielsId)
      
   }
  })
}
var clientMateriels = $("#select-client").on('change', function(e){
    
    var clientId = $(this).val()
    getMateriels(clientId)
    
    
});

var fillMateriels = $("#select-client").trigger('change');

var regexClient=/^([A-zÀ-ÿ\-\s]{3,30})$/;
var formvalidation = $(".input-text-validate").on('keypress keydown keyup',function(){
  if( !$(this).val().match(regexClient)){
      $(this).addClass('is-invalid');
      $(this).next(".input-text-validate-msg").show()
  }else{
      $(this).removeClass('is-invalid');
      $(this).next(".input-text-validate-msg").hide()

  }
})

var regexTitle=/^([A-zÀ-ÿ0-9\-\s]{3,50})$/;
var formvalidation = $(".input-title-validate").on('keypress keydown keyup',function(){
  if( !$(this).val().match(regexTitle)){
      $(this).addClass('is-invalid');
      $(this).next(".input-text-validate-msg").show()
  }else{
      $(this).removeClass('is-invalid');
      $(this).next(".input-text-validate-msg").hide()

  }
})

var regexPrice=/^([0-9]{1,4})$/;
var formvalidation = $(".input-price-validate").on('keypress keydown keyup',function(){
  if( !$(this).val().match(regexPrice)){
      $(this).addClass('is-invalid');
      $(this).next(".input-text-validate-msg").show()
  }else{
      $(this).removeClass('is-invalid');
      $(this).next(".input-text-validate-msg").hide()

  }
})