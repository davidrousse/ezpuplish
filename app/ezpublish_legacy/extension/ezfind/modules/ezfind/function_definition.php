<?php
//
//
// ## BEGIN COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
// SOFTWARE NAME: eZ Publish Community Project
// SOFTWARE RELEASE:  2012.9
// COPYRIGHT NOTICE: Copyright (C) 1999-2012 eZ Systems AS
// SOFTWARE LICENSE: GNU General Public License v2
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
// 
//   This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
// 
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
// ## END COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
//

/*! \file function_definition.php
*/

$FunctionList = array();

$FunctionList['search'] = array( 'name' => 'search',
                                 'operation_types' => 'read',
                                 'call_method' => array( 'class' => 'ezfModuleFunctionCollection',
                                                         'include_file' => 'extension/ezfind/classes/ezfmodulefunctioncollection.php',
                                                         'method' => 'search' ),
                                 'parameter_type' => 'standard',
                                 'parameters' => array( array( 'name' => 'query',
                                                               'type' => 'string',
                                                               'required' => false,
                                                               'default' => '' ),
                                                        array( 'name' => 'offset',
                                                               'type' => 'integer',
                                                               'required' => false,
                                                               'default' => 0 ),
                                                        array( 'name' => 'limit',
                                                               'type' => 'integer',
                                                               'required' => false,
                                                               'default' => 10 ),
                                                        array( 'name' => 'facet',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'filter',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'sort_by',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'class_id',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'section_id',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'subtree_array',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'ignore_visibility',
                                                               'type' => 'bool',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'limitation',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'as_objects',
                                                               'type' => 'boolean',
                                                               'required' => false,
                                                               'default' => true ),
                                                        array( 'name' => 'spell_check',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'boost_functions',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'query_handler',
                                                               'type' => 'string',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'enable_elevation',
                                                               'type' => 'boolean',
                                                               'required' => false,
                                                               'default' => true ),
                                                        array( 'name' => 'force_elevation',
                                                               'type' => 'boolean',
                                                               'required' => false,
                                                               'default' => false ),
                                                        array( 'name' => 'publish_date',
                                                               'type' => 'integer',
                                                               'required' => false,
                                                               'default' => false ),
                                                        array( 'name' => 'distributed_search',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array ( 'name'  => 'fields_to_return',
                                                                'type' => 'array',
                                                                'required' => false,
                                                                'default' => null ),
                                                        array ( 'name'  => 'search_result_clustering',
                                                                'type' => 'array',
                                                                'required' => false,
                                                                'default' => null ),
                                                        array ( 'name'  => 'extended_attribute_filter',
                                                                'type' => 'array',
                                                                'required' => false,
                                                                'default' => array() )) );


$FunctionList['getDefaultSearchFacets'] = array( 'name' => 'getDefaultSearchFacets',
                                          'operation_types' => 'read',
                                          'call_method' => array( 'class' => 'ezfModuleFunctionCollection',
                                                                  'include_file' => 'extension/ezfind/classes/ezfmodulefunctioncollection.php',
                                                                  'method' => 'getDefaultSearchFacets' ),
                                          'parameter_type' => 'standard',
                                          'parameters' => array( ) );

$FunctionList['facetParameters'] = array( 'name' => 'facetParameters',
                                          'operation_types' => 'read',
                                          'call_method' => array( 'class' => 'ezfModuleFunctionCollection',
                                                                  'include_file' => 'extension/ezfind/classes/ezfmodulefunctioncollection.php',
                                                                  'method' => 'getFacetParameters' ),
                                          'parameter_type' => 'standard',
                                          'parameters' => array( ) );

$FunctionList['filterParameters'] = array( 'name' => 'filterParameters',
                                           'operation_types' => 'read',
                                           'call_method' => array( 'class' => 'ezfModuleFunctionCollection',
                                                                   'include_file' => 'extension/ezfind/classes/ezfmodulefunctioncollection.php',
                                                                   'method' => 'getFilterParameters' ),
                                           'parameter_type' => 'standard',
                                           'parameters' => array( ) );


//experimental, useful to query foreign Solr indexes
$FunctionList['rawSolrRequest'] = array( 'name' => 'rawSolrRequest',
                                         'operation_types' => 'read',
                                         'call_method' => array( 'class' => 'ezfModuleFunctionCollection',
                                                                   'include_file' => 'extension/ezfind/classes/ezfmodulefunctioncollection.php',
                                                                   'method' => 'rawSolrRequest' ),
                                         'parameter_type' => 'standard',
                                         'parameters' => array( array( 'name' => 'baseURL',
                                                                       'type' => 'string',
                                                                       'required' => true,
                                                                       'default' => '' ),
                                                                array( 'name' => 'request',
                                                                       'type' => 'string',
                                                                       'required' => true,
                                                                       'default' => 0 ),
                                                                array( 'name' => 'parameters',
                                                                       'type' => 'array',
                                                                       'required' => false,
                                                                       'default' => null ) ) );
$FunctionList['moreLikeThis'] = array( 'name' => 'moreLikeThis',
                                 'operation_types' => 'read',
                                 'call_method' => array( 'class' => 'ezfModuleFunctionCollection',
                                                         'include_file' => 'extension/ezfind/classes/ezfmodulefunctioncollection.php',
                                                         'method' => 'moreLikeThis' ),
                                 'parameter_type' => 'standard',
                                 'parameters' => array( array( 'name' => 'query_type',
                                                               'type' => 'string',
                                                               'required' => true,
                                                               'default' => '' ),
                                                        array( 'name' => 'query',
                                                               'type' => 'string',
                                                               'required' => true,
                                                               'default' => '' ),
                                                        array( 'name' => 'offset',
                                                               'type' => 'integer',
                                                               'required' => false,
                                                               'default' => 0 ),
                                                        array( 'name' => 'limit',
                                                               'type' => 'integer',
                                                               'required' => false,
                                                               'default' => 5 ),
                                                        array( 'name' => 'facet',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'filter',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'sort_by',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'class_id',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'section_id',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'subtree_array',
                                                               'type' => 'array',
                                                               'required' => false,
                                                               'default' => null ),
                                                        array( 'name' => 'as_objects',
                                                               'type' => 'boolean',
                                                               'required' => false,
                                                               'default' => true ),
                                                        array( 'name' => 'query_installation_id',
                                                               'type' => 'string',
                                                               'required' => false,
                                                               'default' => null ) ) );

$FunctionList['elevateConfiguration'] = array(   'name' => 'elevateConfiguration',
                                                 'operation_types' => 'read',
                                                 'call_method' => array( 'class' => 'ezfModuleFunctionCollection',
                                                                         'include_file' => 'extension/ezfind/classes/ezfmodulefunctioncollection.php',
                                                                         'method' => 'fetchElevateConfiguration' ),
                                                 'parameter_type' => 'standard',
                                                 'parameters' => array( array( 'name' => 'countOnly',
                                                                               'type' => 'boolean',
                                                                               'required' => false,
                                                                               'default' => false ),
                                                                        array( 'name' => 'offset',
                                                                               'type' => 'integer',
                                                                               'required' => false,
                                                                               'default' => 0 ),
                                                                        array( 'name' => 'limit',
                                                                               'type' => 'integer',
                                                                               'required' => false,
                                                                               'default' => 10 ),
                                                                        array( 'name' => 'searchQuery',
                                                                               'type' => 'mixed',
                                                                               'required' => false,
                                                                               'default' => null ),
                                                                        array( 'name' => 'languageCode',
                                                                               'type' => 'string',
                                                                               'required' => false,
                                                                               'default' => null ) ) );
?>
