<!DOCTYPE html>
<html lang="en">
<head>
<title>ChimexReality Event Planner </title>
<!-- meta tags -->
@include('include.nav')

<div class="container">

    <form method="post" action="{{ action('photoController@store') }}" enctype="multipart/form-data" >
        {{csrf_field()}}
        

    <div class= "form-group">
<label class="form-control"> Title </label>
<input type="text" name="title" class="form-control" required='add titel'> 
    </div>

    <div class= "form-group">
        <label class="form-control"> Body </label>
        <textarea name="body" class="form-control"></textarea> 
            </div>

                    <div class= "form-group">
                            <label class="form-control">Catigory  </label>
                            
                                <select name="catigory">
                                    <option value="cake">cake</option>
                                    <option value="decoration">Decouration</option>
                                    <option value="undertaker">pal bear/Undertakers</option>
                                    <option value="casket">casket</option>
                                    <option value="makeOver">Makeover/makeup</option>
                                    <option value="catering"> Catering</option>
                                    <option value="amblance"> Amblance</option>  
                                    <option value="usherSecurity">Usher/ event scurity </option>                                   
                                    <!-- <option value="catering"></option>-->
                                  </select>

                                </div>







                                <div class= "form-group">
                                    <label class="form-control">Model  </label>
                                    <input type="text" name="model" class="form-control" placeholder="Type of image" required='add titel'> 
                                        </div>
                                        <div class= "form-group">
                                            <label class="form-control"> Image </label>
                                            <input type="file" name="image" class="form-control" required > 
                                                </div>
        
                            

            <div class= "form-group">
                
                <input type="submit" name="submit" class="form-control"> 
                    </div>
    <form>
    </div>
            @include('/include/footer')
        </body>
        </html>
            