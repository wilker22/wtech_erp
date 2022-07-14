import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/assets/css/auxiliar.css',
                'resources/assets/css/DataTables_boot.css',
                'resources/assets/css/estilo.css',
                'resources/assets/css/grade.css',
                'resources/assets/css/style.css',
                'resources/js/app.js',
                'resources/assets/js/diversos.js',
                'resources/assets/js/funcao.js',
                'resources/assets/js/grafico.js',
                'resources/assets/js/highcharts.js',
                'resources/assets/js/jquery-ui.js',
                'resources/assets/js/jquery.form.js',
                'resources/assets/js/jquery.mask.js',
                'resources/assets/js/jquery.min.js',
                'resources/assets/js/js.js',
                'resources/assetx/js/datatables/js/dataTables.responsive.min.js',
                'resources/assetx/js/datatables/js/jquery.dataTables.min.js',
                'resources/assetx/js/tinymce/tinymce.min.js',
            ],
            refresh: true,
        }),
    ],
});
