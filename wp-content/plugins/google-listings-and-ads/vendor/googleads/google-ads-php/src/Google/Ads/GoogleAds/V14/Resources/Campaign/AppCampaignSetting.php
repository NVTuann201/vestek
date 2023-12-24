<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/campaign.proto

namespace Google\Ads\GoogleAds\V14\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Campaign-level settings for App Campaigns.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.Campaign.AppCampaignSetting</code>
 */
class AppCampaignSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Represents the goal which the bidding strategy of this app campaign
     * should optimize towards.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType bidding_strategy_goal_type = 1;</code>
     */
    protected $bidding_strategy_goal_type = 0;
    /**
     * Immutable. A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>optional string app_id = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $app_id = null;
    /**
     * Immutable. The application store that distributes this specific app.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AppCampaignAppStoreEnum.AppCampaignAppStore app_store = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $app_store = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bidding_strategy_goal_type
     *           Represents the goal which the bidding strategy of this app campaign
     *           should optimize towards.
     *     @type string $app_id
     *           Immutable. A string that uniquely identifies a mobile application.
     *     @type int $app_store
     *           Immutable. The application store that distributes this specific app.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents the goal which the bidding strategy of this app campaign
     * should optimize towards.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType bidding_strategy_goal_type = 1;</code>
     * @return int
     */
    public function getBiddingStrategyGoalType()
    {
        return $this->bidding_strategy_goal_type;
    }

    /**
     * Represents the goal which the bidding strategy of this app campaign
     * should optimize towards.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType bidding_strategy_goal_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBiddingStrategyGoalType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\AppCampaignBiddingStrategyGoalTypeEnum\AppCampaignBiddingStrategyGoalType::class);
        $this->bidding_strategy_goal_type = $var;

        return $this;
    }

    /**
     * Immutable. A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>optional string app_id = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getAppId()
    {
        return isset($this->app_id) ? $this->app_id : '';
    }

    public function hasAppId()
    {
        return isset($this->app_id);
    }

    public function clearAppId()
    {
        unset($this->app_id);
    }

    /**
     * Immutable. A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>optional string app_id = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Immutable. The application store that distributes this specific app.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AppCampaignAppStoreEnum.AppCampaignAppStore app_store = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getAppStore()
    {
        return $this->app_store;
    }

    /**
     * Immutable. The application store that distributes this specific app.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AppCampaignAppStoreEnum.AppCampaignAppStore app_store = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setAppStore($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\AppCampaignAppStoreEnum\AppCampaignAppStore::class);
        $this->app_store = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppCampaignSetting::class, \Google\Ads\GoogleAds\V14\Resources\Campaign_AppCampaignSetting::class);

