@extends('layouts.master')
@section('title')
Home
@stop


@section('content')
                    

                        <div class="module">
                            <div class="module-head">
                                <h3>Issue Book History</h3>
                            </div>
                            <div class="module-body">

                                   <table class="table table-striped table-bordered table-condensed">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Member Name</th>
                                      <th>Book Title</th>
                                      <th>Book category</th>
                                      <th>Issue Date</th>
                                      <th>Return Date</th>
                                      <th>ISBN of Book</th>
                                      <th>Action</th>
      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>science</td>
                                      <td>author</td>
                                      <td>© 2013 KU</td>
                                      <td>7</td>
                                      <td>546789</td>
                                      <td>67</td>
                                      <td> <button class="btn" type="button">
                                          <i class="icon-eye-open"></i></button>
                                           <button class="btn" type="button">
                                            <i class="icon-edit"></i>
                                          </button>
                        <button class="btn" type="button">
                            <i class="icon-trash"></i>
                        </button></td>
                                    </tr>
                                   
                                   
                                  </tbody>
                                </table>
                            </div>
                        </div>

                   
@stop
 