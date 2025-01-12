@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">لیست پست ها
            </div>
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$titleCard ?? ''}}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            @foreach($th as $title)
                                <th scope="col">{{$title}}</th>
                            @endforeach

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->area}}</td>
                                <td>{{$item->price}}</td>

                                <td>
                                    <a href="/admin/cases/{{$item->id}}">نمایش</a>|
                                    <a href="/admin/cases/{{$item->id}}/edit">ویرایش</a>|

                                    <form action="/admin/cases/{{$item->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button>حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
