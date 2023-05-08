import { Image, Text, View, TouchableOpacity } from "react-native";
import { AntDesign } from "@expo/vector-icons";
import { Entypo } from "@expo/vector-icons";
import { Ionicons } from "@expo/vector-icons";
import { useState, useEffect } from "react";
import axios from "axios";
import { API_BASE_URL } from "../IP.js";

export default function Pat_Home_Screen({ navigation }) {
    const [info, setInfo] = useState([]);

    // useEffect(() => {

    //     const fetchDataDoctor = async () => {
    //         try {
    //             const response = await axios.get(
    //                 `${API_BASE_URL}/api/tasks`
    //             );
    //             const data = response.data;
    //             consol.log(data);
    //         } catch (error) {
    //             console.error(error);
    //         }
    //     };

    //     fetchDataDoctor();
    // }, []);

    return (
        <View
            className="flex-1 pt-16  "
            style={{
                backgroundColor: "#F6F6F6",
            }}
        >
            <View className="mx-4 w-full ">
                <Text className="mx-2 text-4xl font-semibold text-[#002B20]">
                    Tabibi
                </Text>
                <Text className="mx-4 mt-6 text-3xl  text-[#00916E]">
                    Hello{" "}
                    <Text className="mx-4 mt-6 text-3xl  text-[#ababab]"></Text>
                </Text>
                <Text className="mx-4 text-4xl font-bold  text-[#002B20]">
                    Explore
                </Text>
            </View>
            <View className="mx-4 mt-5 w-fit rounded-lg bg-[#4DCFC0] drop-shadow-xl">
                <View className="mx-2 -mt-3 flex-row">
                    <View className="w-56 justify-center">
                        <Text className="mt-4 text-2xl font-bold text-[#002B20]">
                            Get the best Medical Service
                        </Text>
                        <Text className="mb-3 text-lg text-[#828282] ">
                            Providing the best medical service emergency{" "}
                        </Text>
                    </View>
                    <Image
                        source={require("../assets/Png-Doc.png")}
                        className="h-36 w-28 
             from-neutral-50 "
                    />
                </View>
            </View>
            <View className="mt-4 w-full p-4">
                <Text className=" text-lg font-bold ">
                    We ensure best insurence for our clients
                </Text>
                <Text className="mt-5 text-lg text-[#726E6E] ">
                    Recommended Doctor
                </Text>
            </View>
            <View className=" mx-5 items-center drop-shadow-2xl">
                <View className="mt-3 max-h-24 w-full  flex-row items-center rounded-xl border-2 border-white bg-white drop-shadow-2xl">
                    <Image
                        source={{
                            uri: "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
                        }}
                        className="m-2 h-16 w-16 self-start rounded-lg drop-shadow-xl "
                    />
                    <View className="ml-3 flex flex-col ">
                        <Text className="mt-2 text-xl font-bold "></Text>
                        <Text className="w-44 text-xs text-gray-400"></Text>
                        <Text className="w-44 text-xs text-gray-400"></Text>
                    </View>
                </View>
            </View>
            <View className="absolute -bottom-0 h-14 w-full self-center rounded-2xl bg-white p-3 ">
                <View className="flex-row items-center  justify-center justify-items-center  space-x-10 align-middle">
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Pat_Home_Screen")}
                    >
                        <AntDesign name="home" size={24} color="black" />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Pat_List_Doc")}
                    >
                        <Entypo name="list" size={24} color="black" />
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("Pat_List_Doc")}
                    >
                        <View className=" flex h-10 w-10 items-center justify-center rounded-full bg-[#FF0000]">
                            <AntDesign
                                name="pluscircleo"
                                size={28}
                                color="white"
                            />
                        </View>
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() =>
                            navigation.navigate("Pat_List_Traitement")
                        }
                    >
                        <Ionicons
                            name="chatbox-outline"
                            size={24}
                            color="black"
                        />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Pat_Profile")}
                    >
                        <AntDesign name="user" size={26} color="black" />
                    </TouchableOpacity>
                </View>
            </View>
        </View>
    );
}
