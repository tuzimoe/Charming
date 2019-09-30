@extends('layouts.post')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <script>
                    function postOnIPFS() {
                        const { Buffer } = Ipfs
                        async function addFile () {
                        const filesAdded = await node.add(Buffer.from('您好蟬鳴'))
                        filesAdded.forEach((file) => document.write(file.hash);
                        }
                        addFile()
                    }
                    </script>
                    <h1 id="status">Node status: Offline</h1>
                    Post 「您好蟬鳴」 <br/>
                    <button onclick="postOnIPFS()">發布</button><br/>
                    您的 IPFS Hash <script>document.write(hash);</script><br/>
                    https://ipfs.io/ipfs/<script>document.write(hash);</script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
