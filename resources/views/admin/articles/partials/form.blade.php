<label for="">Статус</label>
<select class="form-control" name="published">
  @if (isset($article->id))
    <option value="0" @if ($article->published == 0) selected="" @endif>Не опобликовано</option>
    <option value="1" @if ($article->published ==1) selected="" @endif>Опубликовано</option>
  @else
    <option value="0">Не опобликовано</option>
    <option value="1">Опубликовано</option>
  @endif
</select>


<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$article->title ?? ""}}" required>


<label for="">Slug (уникальное значение)</label>
<input class="form-control" type="text" name="slug" blaceholder="Автоматическая генерация" value="{{$article->slug ?? ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">

  @include('admin.articles.partials.categories', ['categories'=> $categories])
</select>

<label for="">Краткое описание</label>
<textarea class="form-control" id = "description_short" name="description_short">{{$article->description_short ?? ""}}</textarea>

<label for="">Полное описание</label>
<textarea class="form-control" id = "description" name="description">{{$article->description ?? ""}}</textarea>

<hr />

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$article->meta_title ?? ""}}" >

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$article->meta_description ?? ""}}" >

<label for="">Мета слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевие слова, через запятую" value="{{$article->meta_keyword ?? ""}}" >


<input name="btn btn-primary" type="submit"  value="Сохранить">
article
