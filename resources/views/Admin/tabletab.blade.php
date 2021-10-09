@extends('Layout.mainLayout')
@section('titleMain', 'Nguyen Van Quy - Table tab')
@section('title', 'Table tab')
@section('main')
    <section class="panel">
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tr class="gradeA">
                    <td>KHTML</td>
                    <td>Konqureror 3.5</td>
                    <td>KDE 3.5</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td>Mac OS 8-9</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td>Mac OS 7.6-9</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td>Mac OS 8-X</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>Misc</td>
                    <td>NetFront 3.1</td>
                    <td>Embedded devices</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>Misc</td>
                    <td>NetFront 3.4</td>
                    <td>Embedded devices</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>Misc</td>
                    <td>Dillo 0.8</td>
                    <td>Embedded devices</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>Misc</td>
                    <td>Links</td>
                    <td>Text only</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <tr class="gradeU">
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td class="actions">
                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="dataTables_paginate paging_bs_normal" id="datatable-default_paginate">
                <ul class="pagination">
                    <li class="prev disabled"><a href="#"><span class="fa fa-chevron-left"></span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next"><a href="#"><span class="fa fa-chevron-right"></span></a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
@section('pageScript')
@endsection
