<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body class="bg-main min-h-screen flex flex-col">

    <script>
        const csrfName = "<?= $this->security->get_csrf_token_name() ?>";
        let csrfHash = "<?= $this->security->get_csrf_hash() ?>";
        const base_url = "<?= base_url('') ?>";
    </script>

    <main class="flex-1 flex flex-col justify-center items-center">
        @yield('content')
    </main>

    @include('includes.footer-min')

    <script src="<?= base_url('assets/js/flyonui.js') ?>"></script>
</body>

</html>
