@php /** @var \App\Models\BlogCategory $item */ @endphp

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#maindata" class="nav-link active" data-toggle="tab" role="tab">Main data</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="maindata" role="tabpanel">
                        <div class="form-group">
                            <label for="title">Header</label>
                            <input value="{{ $item->title }}" name="title" id="title" type="text" class="form-control"
                                minlength="3" required>
                        </div>
                        <div class="form-group">
                            <label for="slug">Indentificator</label>
                            <input name="slug" value="{{ $item->slug }}" id="slug" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Parent</label>
                            <select name="parent_id" id="parent_id" class="form-control" placeholer="Choose category"
                                required="required">
                                @foreach ($categoryList as $categoryOption)
                                <option value="{{ $categoryOption->id }}" @if ($categoryOption->id == $item->parent_id)
                                    selected @endif>
                                    {{ $categoryOption->id }}. {{ $categoryOption->title }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="3" class="form-control">
                                {{ old('description', $item->description) }}
                            </textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>