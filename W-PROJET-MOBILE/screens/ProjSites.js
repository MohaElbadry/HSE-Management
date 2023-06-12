import { Text, View, TouchableOpacity, FlatList } from "react-native";
import { AntDesign } from "@expo/vector-icons";
import { Entypo } from "@expo/vector-icons";
import { Ionicons } from "@expo/vector-icons";
import { useState, useEffect } from "react";
import * as SecureStore from "expo-secure-store";
import axios from "axios";
import { API_BASE_URL } from "../IP.js";
import moment from "moment";

export default function ProjSites({ navigation }) {
    const [projects, setProjects] = useState([]);
    const [sites, setSites] = useState([]);

    useEffect(() => {
        fetchData();
    }, []);
    const fetchData = async () => {
        try {
            const token = await SecureStore.getItemAsync("token");
            if (!token) {
                navigation.navigate("Login");
            }
            await getProjSites(token);
        } catch (error) {
            // navigation.navigate("Login");
        }
    };

    const getProjSites = async (token) => {
        try {
            const response = await axios.get(`${API_BASE_URL}/api/sites`, {
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            });
            const sensibilisations = response.data.sensibilisations;
            setSites(response.data.sites);
            setProjects(response.data.projets);
            return sensibilisations;
        } catch (error) {
            navigation.navigate("Login");
            return [];
        }
    };

    return (
        <View
            className="flex-1 bg-[#1E1E1E] "
            // style={{
            //     backgroundColor: "#8D8CF5",
            // }}
        >
            <View className="rounded-b-4xl w-full rounded-xl bg-[#2d2d2d] px-4 pb-2 pt-10 ">
                <Text className="px-2 text-4xl  text-center  font-semibold text-white">
                    INFO
                </Text>
            </View>
            <Text className="text-white px-2 pt-2 text-center text-xl font-semibold">
                Our Sites
            </Text>
            <FlatList
                className=" flex-1 "
                data={sites}
                keyExtractor={(item) => item.id}
                showsHorizontalScrollIndicator={false}
                showsVerticalScrollIndicator={false}
                renderItem={({ item }) => (
                    <TouchableOpacity className="m-3 rounded-2xl bg-[#2d2d2d] p-4 shadow-sm shadow-[#454545]">
                        <View>
                            <View>
                                <Text className="text-white text-xl font-semibold">
                                    {item.name}
                                </Text>
                                <Text className="text-center text-gray-500">
                                    {item.description}
                                </Text>
                                <Text className=" text-end text-gray-300">
                                     {moment(item.created_at).format("HH:mm:ss")}
                                </Text>
                            </View>
                        </View>
                    </TouchableOpacity>
                )}
            />
            <Text className="text-white px-2 text-center text-xl font-semibold">
                Our projects
            </Text>
            <FlatList
                className="  mb-14 flex-1"
                data={projects}
                keyExtractor={(item) => item.id}
                showsHorizontalScrollIndicator={false}
                showsVerticalScrollIndicator={false}
                renderItem={({ item }) => (
                    <TouchableOpacity className="m-3 rounded-2xl bg-[#2d2d2d] p-4 shadow-sm shadow-[#454545]">
                        <View>
                            <View>
                                <Text className="text-xl text-white font-semibold">
                                    {item.name}
                                </Text>
                                <Text className="text-center text-gray-500">
                                    {item.description}
                                </Text>
                                <Text className="text-center text-gray-500">
                                    {item.proj_start}
                                </Text>
                                <Text className=" text-end text-gray-300">
                      {moment(item.created_at).format("HH:mm:ss")}

                                </Text>
                            </View>
                        </View>
                    </TouchableOpacity>
                )}
            />

            <View className="absolute -bottom-0 h-14 w-full self-center rounded-2xl bg-white p-3 ">
                <View className="flex-row items-center  justify-center justify-items-center  space-x-10 align-middle">
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Home_Screen")}
                    >
                        <AntDesign name="home" size={24} color="black" />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("UserTasksList")}
                    >
                        <Entypo name="list" size={24} color="black" />
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("Add")}
                    >
                        <View className=" flex h-10 w-10 items-center justify-center rounded-full bg-[#0085ff] ">
                            <AntDesign
                                name="pluscircleo"
                                size={28}
                                color="white"
                            />
                        </View>
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("ProjSites")}
                    >
                        <Ionicons
                            name="chatbox-outline"
                            size={24}
                            color="black"
                        />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Profile")}
                    >
                        <AntDesign name="user" size={26} color="black" />
                    </TouchableOpacity>
                </View>
            </View>
        </View>
    );
}
