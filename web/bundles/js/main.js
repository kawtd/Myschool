/*$("document").ready(function(){

        $("#note_pourcentageExam").blur(function(){
            var ds=$("#note_noteDs").val();
            var ex=$("#note_noteExam").val();
            var cords=$("#note_pourcentageDs").val();
        var cofex=$("#note_pourcentageExam").val();
        alert(ds );
        $.ajax({
          type:'get',
          url:'http://localhost/Myschool/web/app_dev.php/note/new/'+$(this).val(),
          success:function(data){
              console.log(data.Classe);
          }
      })
    });



 /* $(".cl").change(function(){
      alert('12');
      $.ajax({
          type:'get',
          url:'http://localhost/Myschool/web/app_dev.php/note/new/'+$(this).val(),
          success:function(data){
              console.log(data.Classe);
          }
      })
  }) 
})*/ 
