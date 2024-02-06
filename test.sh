rand=$(shuf -i 10000000000000-999999999999999 -n 1)
action=$1
site=$2
prompt=$3
mod=$4


if [ "$action" = "list" ]; then
curl -sk "$site/system_stats" | jq '.devices[].name'&
curl -sk "$site/object_info" | jq '.CheckpointLoaderSimple.input.required.ckpt_name[]'
exit
fi



if [ "$action" = "craft" ]; then
curl -s -k -X $'POST' \
 -H $'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0' -H $'Accept: */*' -H $'Accept-Language: en-GB,en;q=0.5' -H $'Accept-Encoding: gzip, deflate, br' -H  -H $'Content-Type: application/json' -H $'Comfy-User: undefined' -H $'Connection: close' \
    --data-binary $"{\"prompt\":{\"3\":{\"inputs\":{\"seed\":$rand,\"steps\":20,\"cfg\":8,\"sampler_name\":\"euler\",\"scheduler\":\"normal\",\"denoise\":1,\"model\":[\"4\",0],\"positive\":[\"6\",0],\"negative\":[\"7\",0],\"latent_image\":[\"5\",0]},\"class_type\":\"KSampler\"},\"4\":{\"inputs\":{\"ckpt_name\":\"$mod\"},\"class_type\":\"CheckpointLoaderSimple\"},\"5\":{\"inputs\":{\"width\":512,\"height\":1024,\"batch_size\":5},\"class_type\":\"EmptyLatentImage\"},\"6\":{\"inputs\":{\"text\":\"$prompt\",\"clip\":[\"4\",1]},\"class_type\":\"CLIPTextEncode\"},\"7\":{\"inputs\":{\"text\":\"text, watermark\",\"clip\":[\"4\",1]},\"class_type\":\"CLIPTextEncode\"},\"8\":{\"inputs\":{\"samples\":[\"3\",0],\"vae\":[\"4\",2]},\"class_type\":\"VAEDecode\"},\"10\":{\"inputs\":{\"images\":[\"8\",0]},\"class_type\":\"PreviewImage\"}},\"extra_data\":{\"extra_pnginfo\":{\"workflow\":{\"last_node_id\":10,\"last_link_id\":10,\"nodes\":[{\"id\":7,\"type\":\"CLIPTextEncode\",\"pos\":[413,389],\"size\":{\"0\":425.27801513671875,\"1\":180.6060791015625},\"flags\":{},\"order\":3,\"mode\":0,\"inputs\":[{\"name\":\"clip\",\"type\":\"CLIP\",\"link\":5}],\"outputs\":[{\"name\":\"CONDITIONING\",\"type\":\"CONDITIONING\",\"links\":[6],\"slot_index\":0}],\"properties\":{\"Node name for S&R\":\"CLIPTextEncode\"},\"widgets_values\":[\"text, watermark\"]},{\"id\":3,\"type\":\"KSampler\",\"pos\":[863,186],\"size\":{\"0\":315,\"1\":262},\"flags\":{},\"order\":4,\"mode\":0,\"inputs\":[{\"name\":\"model\",\"type\":\"MODEL\",\"link\":1},{\"name\":\"positive\",\"type\":\"CONDITIONING\",\"link\":4},{\"name\":\"negative\",\"type\":\"CONDITIONING\",\"link\":6},{\"name\":\"latent_image\",\"type\":\"LATENT\",\"link\":2}],\"outputs\":[{\"name\":\"LATENT\",\"type\":\"LATENT\",\"links\":[7],\"slot_index\":0}],\"properties\":{\"Node name for S&R\":\"KSampler\"},\"widgets_values\":[88372247210531,\"randomize\",20,8,\"euler\",\"normal\",1]},{\"id\":8,\"type\":\"VAEDecode\",\"pos\":[1209,188],\"size\":{\"0\":210,\"1\":46},\"flags\":{},\"order\":5,\"mode\":0,\"inputs\":[{\"name\":\"samples\",\"type\":\"LATENT\",\"link\":7},{\"name\":\"vae\",\"type\":\"VAE\",\"link\":8}],\"outputs\":[{\"name\":\"IMAGE\",\"type\":\"IMAGE\",\"links\":[10],\"slot_index\":0}],\"properties\":{\"Node name for S&R\":\"VAEDecode\"}},{\"id\":6,\"type\":\"CLIPTextEncode\",\"pos\":[415,186],\"size\":{\"0\":422.84503173828125,\"1\":164.31304931640625},\"flags\":{},\"order\":2,\"mode\":0,\"inputs\":[{\"name\":\"clip\",\"type\":\"CLIP\",\"link\":3}],\"outputs\":[{\"name\":\"CONDITIONING\",\"type\":\"CONDITIONING\",\"links\":[4],\"slot_index\":0}],\"properties\":{\"Node name for S&R\":\"CLIPTextEncode\"},\"widgets_values\":[\"beautiful scenery nature glass bottle landscape, , purple galaxy bottle,\"]},{\"id\":10,\"type\":\"PreviewImage\",\"pos\":[1239,337],\"size\":{\"0\":210,\"1\":246},\"flags\":{},\"order\":6,\"mode\":0,\"inputs\":[{\"name\":\"images\",\"type\":\"IMAGE\",\"link\":10}],\"properties\":{\"Node name for S&R\":\"PreviewImage\"}},{\"id\":4,\"type\":\"CheckpointLoaderSimple\",\"pos\":[51,175],\"size\":{\"0\":315,\"1\":98},\"flags\":{},\"order\":0,\"mode\":0,\"outputs\":[{\"name\":\"MODEL\",\"type\":\"MODEL\",\"links\":[1],\"slot_index\":0},{\"name\":\"CLIP\",\"type\":\"CLIP\",\"links\":[3,5],\"slot_index\":1},{\"name\":\"VAE\",\"type\":\"VAE\",\"links\":[8],\"slot_index\":2}],\"properties\":{\"Node name for S&R\":\"CheckpointLoaderSimple\"},\"widgets_values\":[\"sd_xl_base_1.0.safetensors\"]},{\"id\":5,\"type\":\"EmptyLatentImage\",\"pos\":[473,609],\"size\":{\"0\":315,\"1\":106},\"flags\":{},\"order\":1,\"mode\":0,\"outputs\":[{\"name\":\"LATENT\",\"type\":\"LATENT\",\"links\":[2],\"slot_index\":0}],\"properties\":{\"Node name for S&R\":\"EmptyLatentImage\"},\"widgets_values\":[512,1024,5]}],\"links\":[[1,4,0,3,0,\"MODEL\"],[2,5,0,3,3,\"LATENT\"],[3,4,1,6,0,\"CLIP\"],[4,6,0,3,1,\"CONDITIONING\"],[5,4,1,7,0,\"CLIP\"],[6,7,0,3,2,\"CONDITIONING\"],[7,3,0,8,0,\"LATENT\"],[8,4,2,8,1,\"VAE\"],[10,8,0,10,0,\"IMAGE\"]],\"groups\":[],\"config\":{},\"extra\":{},\"version\":0.4,\"seed_widgets\":{\"3\":0}}}}}" \
    $"$site/prompt"
echo ""    
sleep 10

imgs=$(curl -s -k -X $'GET' \
     -H $'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0' -H $'Accept: */*' -H $'Accept-Language: en-GB,en;q=0.5' -H $'Accept-Encoding: gzip, deflate, br' -H $'Comfy-User: undefined' -H $'Connection: close' \
    $"$site/history?max_items=1" | jq '.[].outputs."10".images[].filename')

if [ "$imgs" = "null" ]; then
sleep 10
imgs=$(curl -s -k -X $'GET' \
     -H $'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0' -H $'Accept: */*' -H $'Accept-Language: en-GB,en;q=0.5' -H $'Accept-Encoding: gzip, deflate, br' -H $'Comfy-User: undefined' -H $'Connection: close' \
    $"$site/history?max_items=1" | jq '.[].outputs."10".images[].filename')
fi

for i in $imgs;
do 
url=$(echo $i | tr -d '"')
curl "$site/view?filename=$url&subfolder=&type=temp" -o $url&
done
wait

timeout 20 curl -H "Content-Type: application/json" -X POST "$site/history" -d '{"clear":true}' 


convert -limit memory 3MB -delay 500 -loop 0 *.png ./gif/gif.gif

rm *.png

fi
