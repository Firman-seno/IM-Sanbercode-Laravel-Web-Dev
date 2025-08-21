    @extends('layouts.master')

    @section('title')
      Register
    @endsection


    @section('content')
    <h3>Sign Up Form</h3>
    <form action="/kirim" method="post">
      @csrf
      <label>First Name:</label><br /><br />
      <input type="text" name="firstname" /><br /><br />
      <label>Last Name:</label><br /><br />
      <input type="text" name="lastname" /><br /><br />
      <label>Gender:</label><br /><br />
      <input type="radio" name="gender" id="" />Male <br />
      <input type="radio" name="gender" id="" />Female <br />
      <input type="radio" name="gender" id="" />Others <br /><br />
      <label>Nationality:</label><br /><br />
      <select name="kota" id="">
        <option value="1">Indonesia</option>
        <option value="1">Australia</option>
        <option value="1">America</option>
        <option value="1">German</option></select
      ><br /><br />
      <label>Language Spoken:</label> <br /><br />
      <input type="checkbox" name="ind" />Bahasa Indonesia <br />
      <input type="checkbox" name="eng" />English <br />
      <input type="checkbox" name="oth" id="" /> Others <br />
      <br />
      <label>Bio:</label><br /><br />
      <textarea name="textarea" id="" cols="30" rows="10"></textarea> <br />
      <input type="submit" value="Sign Up" />
    </form>
    @endsection
    
    
    
    
    
  
