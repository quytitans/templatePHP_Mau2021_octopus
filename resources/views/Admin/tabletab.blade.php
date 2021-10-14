@extends('Layout.mainLayout')
@section('titleMain', 'Nguyen Van Quy - Table tab')
@section('title', 'Table tab')
@section('main')
    <section class="panel">
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Band Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Portfolio</th>
                    <th>Ticket Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <div id="tableBody">
                    @foreach($events as $event)
                        <tr class="gradeA">
                            <td>{{$event->eventName}}</td>
                            <td>{{$event->bandNames}}</td>
                            <td>{{$event->startDate}}</td>
                            <td>{{$event->endDate}}</td>
                            <td>{{$event->portfolio}}</td>
                            <td>{{$event->ticketPrice}}</td>
                            <td>
                                @if($event->status ==1)
                                    Đang diễn ra
                                @elseif($event->status ==2)
                                    Đã diễn ra
                                @else
                                    Tạm hoãn
                                @endif
                            </td>
                            <td class="actions">
                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </div>
            </table>
        </div>
    </section>
@endsection
@section('pageScript')
    <script src="js.tableAll"></script>
@endsection
