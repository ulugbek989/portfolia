<div class="mt-6 mb-10">
    <button class="btn btn-info mb-2 d-flex" type="button" wire:click="createModal">
        <svg xmlns="http://www.w3.org/2000/svg"
            width="22" height="22" fill="currentColor" class="bi bi-plus" viewBox="0 0 17 17">
            <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg>
        <span>New</span>
    </button>


    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">Img</th>
                            <th class="border-0">Title</th>
                            <th class="border-0">Text</th>
                            <th class="border-0">Update</th>
                            <th class="border-0 rounded-end">Change</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td><a href="#" class="text-primary fw-bold">{{ $blog->id }}</a></td>
                                <td class="fw-bold d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $blog->img) }}" class="w-25">
                                </td>
                                <td>{{ $blog->title_ru }}</td>
                                <td>{{  Str::limit($blog->text_ru, 40, ' (...)');}}</td>

                                <td>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-12 col-xl-2 px-0">
                                            <div class="small fw-bold">
                                                {{ \Carbon\Carbon::parse($blog->updated_at)->diffForHumans() }}
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <td class="text-success">
                                    <div class="d-flex align-items-center">
                                        <a href="#" wire:click="updateModal( {{ $blog->id }})"
                                            class="me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil-fill text-success"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                            </svg>

                                        </a>
                                        <a href="#" wire:click="deleteModal({{ $blog->id }})"
                                            class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash2-fill text-danger"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Content -->
    @include('livewire.admin.blog.modal-blog')
    @include('livewire.admin.blog.delete')

    <!-- End of Modal Content -->
</div>
<!-- Button Modal -->
