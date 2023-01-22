<h1>{{$category->title}}</h1>
<ul>
@foreach($subCategories as $subCategory)
<li>{{$subCategory->title}}</li>
@endforeach
</ul>