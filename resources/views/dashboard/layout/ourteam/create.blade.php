

<form action="{{ route('ourteams.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="image" class="label-field">Image</label>
    <input type="file" class="form-control input-field" name="image" id="image" required>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="title" class="label-field">Title</label>
    <input type="text" class="form-control input-field" name="title" id="title" required>
    
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>
    
    <button type="submit">Save</button>
   
        <button type="submit">Edit</button>
    

    
        <button type="submit">Delete</button>
    
</form>

<!-- إذا كنت تريد أن تضيف أزرار للتعديل أو الحذف -->


