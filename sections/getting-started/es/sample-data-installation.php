<h3>Sample Data Installation</h3>

<p>Los datos de muestra son utilizados para que su sitio web de Joomla aparezca como en la página de vista previa de la plantilla. Ellos contienen artículos de muestra, imágenes, configuración de módulos, configuración de página web, etc. Si no desea utilizar las imágenes de muestra o cualquier otro contenido de la muestra, por favor omita este paso.</p>

<p>Para instalar los Datos de muestra tiene que completar dos pasos sencillos.</p>

<h4>Subir imágenes de muestra.</h4>

<p>Para subir imágenes de muestra, por favor, abra el directorio del paquete de plantilla y encuentre la carpeta "sources". Allí Usted va a encontrar el directorio "to_the_root_directory". Contiene los ficheros que deben ser colocados en la raíz de su instalación de Joomla. Utilice su gestor de ficheros para subir los ficheros al servidor. .</p>

<h4>Importar el archivo SQL.</h4>

<p>El paso final y más importante de la instalación de los datos de muestra es la
    importación del archivo SQL. El archivo SQL es una copia de seguridad de la base de
    datos de la muestra con todos los datos del sitio web de Joomla. Se puede importar
    el archivo SQL utilizando la herramienta de gestión de base de datos (phpMyAdmin).
    El archivo SQL de plantilla - "dump.sql" se encuentra en el directorio "sources" del
    paquete de la plantilla. </p>


<p class="alert alert-danger">Por favor <b>NO importe</b> el archivo SQL si Usted tiene un sitio web ya existente, ya
    que
    él va a reemplazar totalmente su base de datos y se perderán todos los datos.</p>

<p class="alert alert-danger">NOTA: antes de importar el archivo SQL, por favor asegúrese de que el prefijo de la tabla
    de la base de datos coincide con el prefijo de la tabla en el archivo SQL.</p>

<p>Usted puede verificar el prefijo de la tabla directamente en la base de datos a
    través de la herramienta de gestión de base de datos. Revise los nombres de las
    tablas. El prefijo es un conjunto de símbolos antes del nombre de la tabla. (por
    ejemplo, el prefijo de la tabla "jos_assets" es "jos_"). También Usted puede
    encontrar el prefijo de la Base de datos en el fichero "configuration.php" en el
    directorio raíz de Joomla. Busque la línea 19: </p><code>public $dbprefix = 'jos_';</code> <p>(<i>where the prefix is "jos_"</i>).
</p>

<p>Si los prefijos de las tablas no coinciden, abra el archivo "dump.sql" por medio de su editor de código y con la ayuda de la herramienta Buscar y Reemplazar (teclas de acceso rápido CTRL + F o CTRL + H) reemplace el prefijo "jos_" de la tabla (<i>que es utilizado en el archivo SQL
</i>) con su prefijo correspondiente. Por favor, revise nuestro tutorial detallado sobre el cambio del prefijo de la base de datos en el archivo SQL  <a
        href="/help/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">¿Cómo cambiar el prefijo de la base de datos en el archivo de SQL?</a>.
</p>

<h6>Ahora Usted puede importar el archivo SQL a la base de datos. <br>Para importar los datos de muestra, por favor siga estos pasos simples: (revise las diapositivas ofrecidas):</h6>

<ol class="index-list">
    <li><p>Seleccione su base de datos en la lista de bases de datos en la columna a la izquierda en la herramienta phpMyAdmin:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Haga clic en el botón "Importar" (Import) en el menú superior de navegación:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Haga clic en "Elegir fichero" ("Choose file") y busque el archivo dump.sql en el directorio "sources" del paquete de plantilla:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Pulse el botón "Seguir" ("Go") para iniciar la importación de datos de muestra:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-info">También puede consultar el tutorial siguiente <a
        href="/help/phpmyadmin-how-to-import-sample-data-dump-file.html"
        target="_blank">cómo importar archivos SQL utilizando la herramienta phpMyAdmin</a>.
</p>
