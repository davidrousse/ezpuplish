{* DO NOT EDIT THIS FILE! Use an override template instead. *}
{let package=fetch( package,item,
                    hash( package_name, $package_name,
                          repository_id, $repository_id  ) )}

<div id="package" class="viewfiles">
    <div id="pn-{$package.name|wash}" class="pt-{$package.type|wash}">

    <form method="post" action={concat( 'package/view/files/', $package.name )|ezurl}>

    <div class="objectheader">
        <h2>{$package.name|wash}-{$package.version-number}-{$package.release-number}{if $package.release-timestamp}({$package.release-timestamp|l10n( shortdatetime )}){/if}{if $package.type|wash} [{$package.type}]{/if}
        - {if $package.install_type|eq( 'install' )}
            {if $package.is_installed}
                {'Installed'|i18n('design/standard/package')}
            {else}
                {'Not installed'|i18n('design/standard/package')}
            {/if}
        {else}
            {'Imported'|i18n('design/standard/package')}
        {/if}
        </h2>
    </div>

    <div class="object">
        <div class="summary">
            <label>{'Summary'|i18n('design/standard/package')}</label>
            <p>{$package.summary|wash}</p>
        </div>
    </div>

    {section var=collection loop=$package.file-list}
    <div class="objectheader">
        <h2>{'Files [%collectionname]'|i18n('design/standard/package',, hash( '%collectionname', $collection.key ))}</h2>
    </div>
    <div class="object">
        <div class="files">
        {section var=file loop=$collection}
        <p>
            <a href={concat( $package|ezpackage( fileitempath, $file ) )|ezroot}> {if $file.subdirectory}{$file.subdirectory|wash}/{/if}{$file.name|wash}</a>
            {if $file.variable-name}[{$file.variable-name|wash}]{/if}
            {if $file.md5}MD5: <em>{$file.md5|wash}</em>{/if}
        </p>
        {/section}
        </div>
    </div>
    {/section}

    <div class="links">
        <p>[ <a href={concat( "package/view/full/", $package.name )|ezurl}>{'Details'|i18n('design/standard/package')}</a> ]</p>
    </div>

    {if $package.can_export}
    <div class="buttonblock">
        {if $package.install_type|eq( 'install' )}
            {if $package.is_installed}
                <input class="button" type="submit" name="UninstallButton" value="{'Uninstall'|i18n( 'design/standard/package')}" />
            {else}
                <input class="button" type="submit" name="InstallButton" value="{'Install'|i18n( 'design/standard/package')}" />
            {/if}
        {/if}
        <input class="button" type="submit" name="ExportButton" value="{'Export to file'|i18n( 'design/standard/package')}" />
    </div>
    {/if}

    </form>

    </div>
</div>

{/let}