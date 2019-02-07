// Copyright srcmake.com 2018
/**
 * Create new burgers, so update the burger quantity.
 * @param {com.basic.asset.management.OrderItems} tx The burger asset instance.
 * @transaction
 */
async function orderItems(tx) 
    {
    // The number of burgers we already have.
    const oldItemCount = tx.items.quantity;

    // Update the asset to what the new value is. 
    tx.items.quantity = tx.newItemCount;

    // Get the asset registry for the asset.
    const assetRegistry = await getAssetRegistry('com.basic.asset.management.itemAsset');
    // Update the asset in the asset registry.
    await assetRegistry.update(tx.items);

    // Emit an event for the modified asset.
    let event = getFactory().newEvent('com.basic.asset.management', 'ItemReceivedEvent');
    event.items = tx.items;
    event.howManyBefore = oldItemCount;
    event.howManyNow = tx.newItemCount;
    emit(event);
    }