@extends('layouts.app')

@section('content')
    <h3 class="heading_b uk-margin-bottom">Tenders</h3>

    <div class="md-card">
        <div class="md-card-content large-padding">


            <div class="uk-overflow-container">
                <table class="uk-table uk-table-hover uk-table-align-vertical uk-table-nowrap " id="gad">
                    <thead>
                    <tr>
                        <th>N<u>o</u></th>
                        <th>Type</th>
                        <th>Opportunity</th>
                        <th>Expression of interest</th>
                        <th>Industry</th>
                        <th>District</th>
                        <th>Region</th>
                        <th>Year</th>
                        <th>Date Created</th>
                        <th>Action</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $index=> $row)


                        <tr align="">
                            <td> {{ $data->perPage()*($data->currentPage()-1)+($index+1) }} </td>
                            <td> {{ @$row->type }}</td>
                            <td> {{ @$row->opportunity	 }}</td>
                            <td> {{ @$row->expression_of_interest	 }}</td>
                            <td> {{ @$row->industry	 }}</td>
                            <td> {{ @$row->district }}</td>
                            <td> {{ @$row->region }}</td>
                            <td> {{ @$row->year }}</td>
                            <td> {{ @$row->created_at }}</td>

                            <td>

                                <a href='{{url("tender/$row->id/edit")}}'><i title='Click to edit this tender'
                                                                             class="md-icon material-icons">edit</i></a>

                                {!!Form::open(['action' =>['TenderController@destroy', 'id'=>$row->id], 'method' => 'DELETE','name'=>'c' ,'style' => 'display: inline;'])  !!}
                                <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete   {{$row->type}} ?')"
                                        class="md-btn  md-btn-danger md-btn-small   md-btn-wave-light waves-effect waves-button waves-light">
                                    <i class="sidebar-menu-icon material-icons md-18">delete</i></button>

                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
            <div class="md-fab-wrapper">
                <a class="md-fab md-fab-small md-fab-accent md-fab-wave" href="{!! route('tender.create') !!}">
                    <i class="material-icons md-18">&#xE145;</i>
                </a>
            </div>


        </div>
    </div>
@endsection
@section('js')

    <script>


        var oTable = $('#gad').DataTable();
    </script>
@endsection