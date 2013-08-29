<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package     MetaModels
 * @subpackage  AttributeText
 * @author      Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author      Andreas Isaak <info@andreas-isaak.de>
 * @copyright   The MetaModels team.
 * @license     LGPL.
 * @filesource
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'MetaModels\Attribute\Text\Text'      => 'system/modules/metamodelsattribute_text/MetaModels/Attribute/Text/Text.php',
	'MetaModelAttributeText'              => 'system/modules/metamodelsattribute_text/deprecated/MetaModelAttributeText.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mm_attr_text'              => 'system/modules/metamodelsattribute_text/templates',
));
