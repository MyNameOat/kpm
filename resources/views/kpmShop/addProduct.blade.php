@extends('layoutsShop.app')

@section('content')

<div class="ibox-content">
    <form action="{{ route('shop.add-config') }}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-group"><label class="col-sm-2 control-label">Type</label>

            <div class="col-sm-10">
                <select class="form-control m-b" name="type">
                    <option>SELECT TYPE</option>
                    <option>CAT</option>
                    <option>DOG</option>
                    <option>FISH</option>
                    <option>PLAYING</option>
                    <option>FOOD ANIMAL</option>
                </select>
            </div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10"><input type="file" class="form-control" name="image"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10"><input type="text" class="form-control" name="name"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <div class="input-group m-b">
                    <span class="input-group-addon">$</span> <input type="text" class="form-control" name="price"> <span class="input-group-addon">.00</span>
                </div>
            </div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Unit</label>
            <div class="col-sm-10"><input type="text" class="form-control" name="unit"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Total</label>
            <div class="col-sm-10"><input type="text" class="form-control" name="total"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10"><input type="text" class="form-control" name="Des"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Storage</label>
            <div class="col-sm-10"><input type="text" class="form-control" name="Sto"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Origin</label>
            <div class="col-sm-10"><input type="text" class="form-control" name="Ori"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Preparation_usage</label>
            <div class="col-sm-10"><input type="text" class="form-control" name="Pre"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Nutntional Information</label>
            <div class="col-sm-10"><input type="text" class="form-control" name="Nu"></div>
        </div>
        <div class="form-group" style="text-align: center">
            <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-primary" type="submit">Save</button>
                &nbsp;&nbsp;&nbsp;
                <button class="btn btn-danger" type="submit">Cancel</button>
            </div>
        </div>
    </form>
</div>

@endsection
@section('script')
<script>

</script>
@endsection
