function func_add(){
    console.log("clicked!!");
        var x=document.getElementById('hide_add');
        var y=document.getElementById('add');

        var hupdate=document.getElementById("hide_update");
        var hdelete=document.getElementById("hide_delete");
        var hretrive=document.getElementById("hide_retrive");

        var upd=document.getElementById('update');
        var del=document.getElementById('delete');
        var ret=document.getElementById('retrive');

        console.log(x.style.display);

        if((hupdate.style.display!="none" || hupdate.style.display!="") ||
        (hdelete.style.display!="none" || hdelete.style.display!="") ||
        (hretrive.style.display!="none" || hretrive.style.display!="") 
        ){

          hupdate.style.display="none";
          upd.style.backgroundColor='black';
          upd.style.color='white';

          hdelete.style.display="none";
          del.style.backgroundColor='black';
          del.style.color='white';

          hretrive.style.display="none";
          ret.style.backgroundColor='black';
          ret.style.color='white';

           
          if (x.style.display == "none" || x.style.display == ""){
          x.style.display='block';
         x.style.backgroundColor="lightblue";
         y.style.backgroundColor="white";
         y.style.color="black";

         
        }
           
        else{
          x.style.display='none';
          y.style.backgroundColor="black";
         y.style.color="white";
        }

        }
       
           
  }
  function func_update(){
    console.log("clicked!!");
        var x=document.getElementById('hide_update');
        var y=document.getElementById('update');

        var hadd=document.getElementById("hide_add");
        var hdelete=document.getElementById("hide_delete");
        var hretrive=document.getElementById("hide_retrive");

        var add=document.getElementById('add');
        var del=document.getElementById('delete');
        var ret=document.getElementById('retrive');

        console.log(x.style.display);

        if((hadd.style.display!="none" || hadd.style.display!="") ||
        (hdelete.style.display!="none" || hdelete.style.display!="") ||
        (hretrive.style.display!="none" || hretrive.style.display!="") 
        ){

          hadd.style.display="none";
          add.style.backgroundColor='black';
          add.style.color='white';

          hdelete.style.display="none";
          del.style.backgroundColor='black';
          del.style.color='white';

          hretrive.style.display="none";
          ret.style.backgroundColor='black';
          ret.style.color='white';

        if (x.style.display == "none" || x.style.display == ""){
          x.style.display='block';
          x.style.backgroundColor="lightblue";
          y.style.backgroundColor="white";
         y.style.color="black";
        }
           
        else{
          x.style.display='none';
          y.style.backgroundColor="black";
         y.style.color="white";
        }

      }
  }
  function func_delete(){
    console.log("clicked!!");
        var x=document.getElementById('hide_delete');
        var y=document.getElementById('delete');
        console.log(x.style.display);

        var hupdate=document.getElementById("hide_update");
        var hadd=document.getElementById("hide_add");
        var hretrive=document.getElementById("hide_retrive");

        var upd=document.getElementById('update');
        var add=document.getElementById('add');
        var ret=document.getElementById('retrive');

        if((hupdate.style.display!="none" || hupdate.style.display!="") ||
        (hadd.style.display!="none" || hadd.style.display!="") ||
        (hretrive.style.display!="none" || hretrive.style.display!="") 
        ){

          hupdate.style.display="none";
          upd.style.backgroundColor='black';
          upd.style.color='white';

          hadd.style.display="none";
          add.style.backgroundColor='black';
          add.style.color='white';

          hretrive.style.display="none";
          ret.style.backgroundColor='black';
          ret.style.color='white';

          
        if (x.style.display == "none" || x.style.display == ""){
          x.style.display='block';
          x.style.backgroundColor="lightblue";
          y.style.backgroundColor="white";
         y.style.color="black";
        }
        else{
          x.style.display='none';
          y.style.backgroundColor="black";
         y.style.color="white";
        }

      }
  }
  function func_retrive(){
    console.log("clicked!!");
        var x=document.getElementById('hide_retrive');
        var y=document.getElementById('retrive');
        console.log(x.style.display);

        var hupdate=document.getElementById("hide_update");
        var hdelete=document.getElementById("hide_delete");
        var hadd=document.getElementById("hide_add");

        var upd=document.getElementById('update');
        var del=document.getElementById('delete');
        var add=document.getElementById('add');

        console.log(x.style.display);

        if((hupdate.style.display!="none" || hupdate.style.display!="") ||
        (hdelete.style.display!="none" || hdelete.style.display!="") ||
        (hadd.style.display!="none" || hadd.style.display!="") 
        ){

          hupdate.style.display="none";
          upd.style.backgroundColor='black';
          upd.style.color='white';

          hdelete.style.display="none";
          del.style.backgroundColor='black';
          del.style.color='white';

          hadd.style.display="none";
          add.style.backgroundColor='black';
          add.style.color='white';

        if (x.style.display == "none" || x.style.display == ""){
          x.style.display='block';
          x.style.backgroundColor="lightblue";
          y.style.backgroundColor="white";
         y.style.color="black";
        }
           
        else{
          x.style.display='none';
          y.style.backgroundColor="black";
         y.style.color="white";
        }
      } 
  }
