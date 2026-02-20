<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body class="bg-main min-h-screen flex flex-col">

    <main class="flex-1 flex flex-col justify-center items-center">
        @yield('content')
    </main>

    @include('includes.footer-min')

    <script src="<?= base_url('assets/js/flyonui.js') ?>"></script>
</body>

</html>
