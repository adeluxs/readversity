<?php
class ControllerExtensionFeedXmlFeed extends Controller
{
    public function index()
    {
        if ($this->config->get('xmlfeed_status')) {
            $output  = '<?xml version="1.0" encoding="UTF-8" ?>';
            $output .= '<offers>';

            $this->load->model('catalog/product');
            $this->load->model('catalog/category');
            $this->load->model('tool/image');

            $products = $this->model_catalog_product->getProducts();
            foreach ($products as $product) {
                if ($product['image']) {
                    $output .= '<offer>';
                    $output .= '<id><![CDATA[' . $product['product_id'] . ']]></id>';
                    $output .= '<name><![CDATA[' . $product['name'] . ']]></name>';
                    if ($product['model']) {
                        $output .= '<model>' . $product['model'] . '</model>';
                    }
                    if ($product['sku']) {
                        $output .= '<sku>' . $product['sku'] . '</sku>' ;
                    }
                    if ($product['upc']) {
                        $output .= '<upc>' . $product['upc'] . '</upc>';
                    }
                    if ($product['ean']) {
                        $output .= '<ean>' . $product['ean'] . '</ean>';
                    }
                    if ($product['jan']) {
                        $output .= '<jan>' . $product['jan'] . '</jan>';
                    }
                    if ($product['isbn']) {
                        $output .= '<isbn>' . $product['isbn'] . '</isbn>' ;
                    }
                    if ($product['mpn']) {
                        $output .= '<mpn>' . $product['mpn'] . '</mpn>';
                    }
                    if ($product['location']) {
                        $output .= '<location>' . $product['location'] . '</location>';
                    }
                    if ($product['status']) {
                        $output .= '<status>' . $product['status'] . '</status>';
                    }
                    $output .= '<brand>' . $product['manufacturer'] . '</brand>';
                    //$output .= '<ProductQTY>' . $product['quantity']. '</ProductQTY>';

                    if(!empty( $product['special'] )) {
                        $output .= '<IsPromoted>1</IsPromoted>';
                        $output .= '<price><![CDATA[' . $product['special'] . ']]></price>';
                        $output .= '<oldprice><![CDATA[' . $product['price'] . ']]></oldprice>';
                    } else {
                        $output .= '<IsPromoted>0</IsPromoted>';
                        $output .= '<price><![CDATA[' . $product['price'] . ']]></price>';
                    }
                    //$output .= '<points>' . $product['points']. '</points>';
                    //$output .= '<price>' . $product['price'] . '</price>';
                    //$output .= '<date_available>' . $product['date_available'] . '</date_available>';
                    //$output .= '<weight>' . $product['weight']. '</weight>';
                    //$output .= '<length>' . $product['length'] . '</length>';
                    //$output .= '<width>' . $product['width'] . '</width>';
                    //$output .= '<height>' . $product['height']. '</height>';
                    //$output .= '<minimum>' . $product['minimum'] . '</minimum>';
                    //$output .= '<sort_order>' . $product['sort_order'] . '</sort_order>';
                    //$output .= '<date_added>' . $product['date_added']. '</date_added>';
                    //$output .= '<date_modified>' . $product['date_modified'] . '</date_modified>';
                    $options = $this->model_catalog_product->getProductOptions($product['product_id']);
                    $sizes = [];
                    if(!empty( $options )) {
                        foreach( $options as $option ) {
                            foreach($option['product_option_value'] as $value) {
                                if( $value['quantity'] > 0 ) {
                                    $sizes[] = $value['name'];
                                }
                            }
                        }
                        if(!empty($sizes)) {
                            $output .= '<sizes><![CDATA[' . implode("," , $sizes) . ']]></sizes>';
                        }
                    }

                    $categories = $this->model_catalog_product->getCategories($product['product_id']);
                    foreach ($categories as $category) {
                        if( $category['category_id'] == 60 ) {
                            $output .= '<gender><![CDATA[Żeńska]]></gender>';
                        }
                        if( $category['category_id'] == 59 ) {
                            $output .= '<gender><![CDATA[Męska]]></gender>';
                        }
                        $path = $this->getPath($category['category_id']);
                        if ($path) {
                            $string = '';
                            foreach (explode('_', $path) as $path_id) {
                                $category_info = $this->model_catalog_category->getCategory($path_id);
                                if ($category_info) {
                                    if (!$string) {
                                        $string = $category_info['name'];
                                    } else {
                                        $string .= ' &gt; ' . $category_info['name'];
                                    }
                                }
                            }
                        }
                    }
                    $output .= '<cat><![CDATA[' . $string . ']]></cat>';
                    $output .= '<desc><![CDATA['. $product['description'] . ']]></desc>';
                    $output .= '<url><![CDATA[' . $this->url->link('product/product', 'product_id=' . $product['product_id']) . ']]></url>';
                    $output .= '<imgs><img default="true"><![CDATA[' . $this->model_tool_image->resize($product['image'], 500, 500) . ']]></img></imgs>';
                    $output .= '</offer>';
                }
            }
            $output .= '</offers>';
            $this->response->addHeader('Content-Type: application/xml');
            $this->response->setOutput($output);
        }
    }
    protected function getPath($parent_id, $current_path = '')
    {
        $category_info = $this->model_catalog_category->getCategory($parent_id);
        if ($category_info) {
            if (!$current_path) {
                $new_path = $category_info['category_id'];
            } else {
                $new_path = $category_info['category_id'] . '_' . $current_path;
            }
            $path = $this->getPath($category_info['parent_id'], $new_path);
            if ($path) {
                return $path;
            } else {
                return $new_path;
            }
        }
    }
}
