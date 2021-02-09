@extends('layouts.dashboard')

@section('title', 'Dashboard')
    @include('livewire.update')
@section('content')
    <div class="row m-5">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Active Users
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="active btn btn-focus">Last Week</button>
                            <button class="btn btn-focus">All Month</button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th class="text-center">email</th>
                                <th class="text-center">links</th>
                                <th class="text-center">created date</th>
                                <th class="text-center">last update</th>
                                <th class="text-center">Actions</th>
                                <th class="text-center">Roles</th>
                                <th class="text-center">Permissions</th>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <td class="text-center text-muted">#{{ $user->id }}</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle"
                                                            src="assets/images/avatars/4.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{ $user->name }}</div>
                                                    <div class="widget-subheading opacity-7">Web Developer</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $user->email }}</td>
                                    <td class="text-center">
                                        <div class="badge badge-warning">{{ count($user->links) }}</div>
                                    </td>
                                    <td class="text-center">{{ $user->created_at->format('d/m/Y à H:i:s') }}</td>
                                    <td class="text-center">{{ $user->updated_at->format('d/m/Y à H:i:s') }}</td>
                                    <td class="text-center">
                                        <button wire:click="save"
                                            class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                                                class="fas fa-eye"></i></button>
                                        <button wire:click="save"
                                            class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                                                class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button data-toggle="modal" data-target="#updateModal"
                                            wire:click="edit({{ $user->id }})"
                                            class="mr-2 btn-icon btn-icon-only btn btn-outline-info"><i
                                                class="pe-7s-pen  btn-icon-wrapper">
                                            </i></button>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-1"
                                            class="btn btn-primary btn-sm">Details</button>
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                                                class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-1"
                                            class="btn btn-primary btn-sm">Details</button>
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                                                class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-block text-center card-footer">

                </div>
            </div>
        </div>
    </div>

    @livewire('users')


@endsection
