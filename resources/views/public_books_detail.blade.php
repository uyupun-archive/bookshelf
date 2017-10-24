@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('common.errors')
            <form action="{{ url('books/update') }}" method="POST">
                <div class="form-group">
                    <label for="item_name">書籍名</label>
                    {{ $book->item_name }}
                </div>

                <div class="form-group">
                    <label for="item_amount">価格</label>
                    {{ $book->item_amount }}
                </div>

                <div class="form-group">
                    <label for="item_number">数量</label>
                    {{ $book->item_number }}
                </div>

                <div class="form-group">
                    <label for="published">出版社</label>
                    {{ $book->published }}
                </div>

                <div class="well well-sm">
                    <a class="btn btn-link pull-right" href="{{ url('/') }}">
                        <i class="glyphicon glyphicon-backward"></i> 戻る
                    </a>
                </div>

                <input type="hidden" name="id" value="{{ $book->id }}">

                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection