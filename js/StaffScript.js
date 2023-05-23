
 $(document).ready(function(){
 var i = 1;
 $('#add').click(function(e){
 e.preventDefault();
 i++;
 var it = 1;
 $('#dynamicadd').append('<div class="form-row" id="form-row'+i+'"><div class="form-group col-md-3"><input type="text" placeholder="Adjust Lecture With..." name="adjustedWith' + it + '" class="form-control border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4" ></div><div class="form-group col-md-2"><input type="date" name="lecDate' + it + '" onfocus="(this.type="date")" onblur="(this.type="text")" placeholder="Lecture Date" class="form-control border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4" > </div><div class="form-group col-md-2"><input type="time" name="lecStartTime' + it + '" onfocus="(this.type="date")" onblur="(this.type="text")"  placeholder="start Time" class="form-control border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4" ></div><div class="form-group col-md-2"><input type="time" name="lecEndTime' + it + '" onfocus="(this.type="time")"onblur="(this.type="text")" placeholder="End Time" class="form-control border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4" ></div> <div class="form-group col-md-2"> <input type="text" name="subject' + it + '" placeholder="Subject" class="form-control border-top-0 border-right-0 border-left-0  border border-dark" id="inputPassword4"></div><div class="form-group col-sm-12 col-md-1"><button type="button" id="'+i+'" class="btn btn-danger remove_row">-</button></div> </div>');
 it++;
 });
 $(document).on('click','.remove_row',function(){
 var row_id = $(this).attr("id");
 $('#form-row'+row_id+'').remove();
 });
 });
