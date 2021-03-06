<?php
/*
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
      
namespace ApaiIO\Operations;
/**
 * A cart get operation
 *
 * @see    http://docs.aws.amazon.com/AWSECommerceService/2011-08-01/DG/CartAdd.html
 * @author 
 */
class CartGet extends AbstractOperation
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'CartGet';
    }

    /**
     * Sets the cart id
     *
     * @param string $cartId
     */
    public function setCartId($cartId)
    {
        $this->parameter['CartId'] = $cartId;
    }

    /**
     * Sets the HMAC
     *
     * @param string $HMAC
     */
    public function setHMAC($HMAC)
    {
        $this->parameter['HMAC'] = $HMAC;
    }
	
	    /**
     * Sets the CartItemId
     *
     * @param string $CartItemId
     */
    public function setCartItemId($CartItemId)
    {
        $this->parameter['CartItemId'] = $CartItemId;
    }
	

	
}
