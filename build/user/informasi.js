Vue.component('modal',{ //modal
    template:`
      <transition
                enter-active-class="animated rollIn"
                     leave-active-class="animated rollOut">
    <transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">

          <div class="modal-header">
            <slot name="header">
              
            </slot>
          </div>

          <div class="modal-body">
            <slot name="body">
              
            </slot>
          </div>

          <div class="modal-footer">
            <slot name="footer">
             
            </slot>
          </div>
        </div>
      </div>
    </div>

</transition>
    `
})

Vue.component('modal', {
  template: '#modal-template'
})

  var v = new Vue({
    el: '#app',
    data:{
        url:'http://localhost/gopolis/',
        addModal: false,
        editModal:false,
        deleteModal:false,
        informasi_dini:[],
        search: {text: ''},
        emptyResult:false,
        newInformasi:{
            id_kategori_informasi:'',
            judul_kategori_informasi:'',
            kategori_informasi_gambar:'',},
        chooseInformasi:{},
        formValidate:[],
        successMSG:'',
        
        //pagination
        currentPage: 0,
        rowCountPage:5,
        totalInformasi:0,
        pageRange:2,
         message: 'Hello Vue.js!'
    },
     created(){
      this.showAll(); 
    },
    methods:{
         showAll(){ axios.get(this.url+"Informasi_dini/showAll").then(function(response){
                 if(response.data.informasi_dini == null){
                     v.noResult()
                    }else{
                        v.getData(response.data.informasi_dini);
                    }
            })
        },
          searchInformasi(){
            var formData = v.formData(v.search);
              axios.post(this.url+"Informasi_dini/searchInformasi", formData).then(function(response){
                  if(response.data.informasi_dini == null){
                      v.noResult()
                    }else{
                      v.getData(response.data.informasi_dini);
                    
                    }  
            })
        },
          addInformasi(){   
            var formData = v.formData(v.newInformasi);
              axios.post(this.url+"Informasi_dini/addInformasi", formData).then(function(response){
                if(response.data.error){
                    v.formValidate = response.data.msg;
                }else{
                    v.successMSG = response.data.msg;
                    v.clearAll();
                    v.clearMSG();
                }
               })
        },
        updateInformasi(){
            var formData = v.formData(v.chooseInformasi); axios.post(this.url+"Informasi_dini/updateInformasi", formData).then(function(response){
                if(response.data.error){
                    v.formValidate = response.data.msg;
                }else{
                    v.successMSG = response.data.success;
                    v.clearAll();
                    v.clearMSG();
                
                }
            })
        },
        deleteInformasi(){
             var formData = v.formData(v.chooseInformasi);
              axios.post(this.url+"Informasi_dini/deleteInformasi", formData).then(function(response){
                if(!response.data.error){
                    v.successMSG = response.data.success;
                    v.clearAll();
                    v.clearMSG();
                }
            })
        },
         formData(obj){
      var formData = new FormData();
          for ( var key in obj ) {
              formData.append(key, obj[key]);
          } 
          return formData;
    },
        getData(informasi_dini){
            v.emptyResult = false; // become false if has a record
            v.totalInformasi = informasi_dini.length //get total of user
            v.informasi_dini = informasi_dini.slice(v.currentPage * v.rowCountPage, (v.currentPage * v.rowCountPage) + v.rowCountPage); //slice the result for pagination
            
             // if the record is empty, go back a page
            if(v.informasi_dini.length == 0 && v.currentPage > 0){ 
            v.pageUpdate(v.currentPage - 1)
            v.clearAll();  
            }
        },
            
        selectInformasi(informasi){
            v.chooseInformasi = informasi; 
        },
        clearMSG(){
            setTimeout(function(){
       v.successMSG=''
       },3000); // disappearing message success in 2 sec
        },
        clearAll(){
            v.newInformasi = { 
               id_kategori_informasi:'',
            judul_kategori_informasi:'',
            kategori_informasi_gambar:'',};
            v.formValidate = false;
            v.addModal= false;
            v.editModal=false;
            v.deleteModal=false;
            v.refresh()
            
        },
        noResult(){
          
               v.emptyResult = true;  // become true if the record is empty, print 'No Record Found'
                      v.informasi_dini = null 
                     v.totalInformasi = 0 //remove current page if is empty
            
        },

       
        pageUpdate(pageNumber){
              v.currentPage = pageNumber; //receive currentPage number came from pagination template
                v.refresh()  
        },
        refresh(){
             v.search.text ? v.searchInformasi() : v.showAll(); //for preventing
            
        }
    }
  })