<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - {{ $judul->title ?? 'Content' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="mb-4">FAQ for {{ $judul->title ?? 'Content' }}</h1>

        <div class="mb-3">
            <a href="{{ url('/admin/dashboard') }}" class="btn btn-secondary me-2">Back to Content</a>
            <a href="{{ url('/admin/FAQ/create/' . $judul->id) }}" class="btn btn-primary">Add FAQ</a>
        </div>

        @if($faqs->count() > 0)
            <div class="card mb-4">
                <div class="card-header">
                    <h3>FAQs</h3>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $faqItem)
                            <tr>
                                <td>{{ $faqItem->judul }}</td>
                                <td>{{ $faqItem->deskripsi }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('/admin/FAQ/edit/' . $faqItem->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ url('/admin/FAQ/delete/' . $faqItem->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info">No FAQs found. Click "Add FAQ" to create one.</div>
        @endif

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Q&A</h3>
                @if($faqs->count() > 0)
                    <a href="{{ url('/admin/QnA/create/' . $faqs->first()->id) }}" class="btn btn-success btn-sm">Add Q&A</a>
                @endif
            </div>

            @if($qna->count() > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($qna as $q)
                            <tr>
                                <td>{{ $q->pertanyaan }}</td>
                                <td>{{ $q->jawaban }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('/admin/QnA/edit/' . $q->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ url('/admin/QnA/delete/' . $q->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="card-body">
                    <div class="alert alert-info">No Q&A found. Click "Add Q&A" to create one.</div>
                </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>